<?php
	class Page
	{
		public $content;
		public $title = "The Witch's Hut";
		public $keywords = "Essential Oils, Witchcraft, Wicca, Wiccan, Tarot, Incense";
		public $buttons = array(
			"Home" => "home.php",
			"Store" => "store.php",
			"Contact" => "contact.php");
			
		public function __set($name, $value)
		{
			$this->$name = $value;
		}
		//start building the page via script individually implementing 
		//each part of the page's head as their own function so that they 
		//can be updated or modified independently in subpages if necessary
		public function Display()
		{
			echo "<html>\n<head>\n";
			$this -> DisplayTitle();
			$this -> DisplayKeywords();
			$this -> DisplayStyles();
			echo "</head>\n<body>\n";
			$this -> DisplayHeader();
			$this -> DisplayMenu($this->buttons);
			echo $this->content;
			$this -> DisplayFooter();
			echo "</body>\n</html>\n";
		}
		
		public function DisplayTitle()
		{
			echo "<title>".$this->title."</title>";
		}
		
		public function DisplayKeywords()
		{
			echo "<meta name='keywords' content='".$this->keywords."'/>";
		}
		
		public function DisplayStyles()
		{
			?>
			<link href="../styles/styles.css" type="text/css" rel="stylesheet">
			<?php
		}
		
		public function DisplayHeader()
		{
			?>
			<header>
				<img class="logo" src="../media/images/moon.jpg" alt="Witch's Moon" height="70" width="70" />
				<h1>The Witch's Hut</h1>
			</header>
			<?php
		}
		
		public function DisplayMenu($buttons)
		{
			echo "<nav>";
			while (list($name, $url) = each($buttons))
			{
				$this->DisplayButton($name, $url, !$this->IsURLCurrentPage($url));
			}
			echo "</nav>\n";
		}
		
		public function IsURLCurrentPage($url)
		{
			if(strpos($_SERVER['PHP_SELF'],$url)===false)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		//implement two different button appearances for active and passive states
		public function DisplayButton($name,$url,$active=true)
		{
			if($active)
			{
				?>
				<div class="menuitem">
					<a href="<?=$url?>">
					<img src="../media/images/s-logo.jpg" alt="" height="20" width="20" />
					<span class="menutexxt"><?=$name?></span>
					</a>
				</div>
				<?php
			}
			else
			{
				?>
				<div class="menuitem">
				<img src="../media/images/side-logo.jpg" alt="" height="20" width="20" />
				<span class="menutext"><?=$name?></span>
				</div>
				<?php
			}
		}
		
		public function DisplayFooter()
		{
			?>
			<footer>
				<p class="footer">&copy; The Witch's Hut<br />
				All Rights Reserved</p>
			</footer>
			<?php
		}
	}
	?>