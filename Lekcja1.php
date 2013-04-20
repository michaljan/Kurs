//skalary  - $dfdfdf='Hello World';
$dfdfdf="Hello World";
$dfdfdf=2;
$dfdfdf=2.3;
$dfdfdf=true;
$dfdfdf=true;
//wektory
$array=array();
$object= new StdClass();
//tablice 2 typy
//indeksowana liczbowo
$array=array('a','b','c');
//asocjacyjna indeksowana nazwami
$array=array('ala'=>'ma kota','1 '=>'aty','cici'=>'dfdfdf');
//var_dump($array);////////////////////////////////////////////////////////////////////
function a($sum1,$sum2){
  echo $sum1+$sum2;
}
//
a(2,6);
class Uzytkownik{	
public $imie=null;	
public $nazwisko=null;			
public function __construct($imie,$nazwisko)	{
		$this->imie=$imie;
		$this->nazwisko=$nazwisko;
		}		
public function przedstawSie()	{	
	echo $this->imie.' '.$this->nazwisko;	
}		
public function zjedzKanapke()	{
		echo "<br/>O jaka dobra kanapka powiedział ".$this->imie;	}}
////////////////////////////////////////////////////////
$uzytkownik=new Uzytkownik('Michał','Janicki');
$uzytkownik->przedstawSie();
$uzytkownik->zjedzKanapke();
$uzytkownik2=new Uzytkownik('Marcin','Janicki');
$uzytkownik2->przedstawSie();
$uzytkownik2->zjedzKanapke();
