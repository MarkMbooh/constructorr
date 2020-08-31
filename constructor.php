<?php 
	class game
	{
		public $title;
		public $genreGame;
		public $jumlahLevel;

		function __construct($title, $genreGame, $jumlahLevel)
		{
			$this->title = $title;
			$this->genreGame = $genreGame;
			$this->jumlahLevel = $jumlahLevel;
			echo "Title : ".$this->title."<br>Genre game : ".$this->genreGame."<br>Jumlah level : ".$this->jumlahLevel;
		}
	}

	$game1 = new game('shot', 'fps', '40');
 ?>