//samochod
//kierownica
//kolo
//podwozia
//nadwozia
//agregacja - gdy obiekt zawiera w sobie inny obiekt nie jest konieczne do dzialania programu
//kompozycja -  gdy dla wytworzenia obiektu, potrzebny jest inny obiekt;
class Kolo {
  public $sruby=array();
}
class Lusterko {
	public $szybka="żółta";
}

class Podwozie{
	public $rodzaj="Metal";
}


class Nadwozie{
	public $ksztalt="Sportowy";

}
class Samochod{
	public $kolor;
	public $marka;	
	public $typ;	
	public $kola=array();
	public $lusterka=array();
	public $podwozie;
	public $nadwozie;
	
	
public function __construct(Podwozie $dupa,Nadwozie $noga)
	{			
		$this -> podwozie = $dupa;
		$this -> nadwozie = $noga;
		
	}			
public function addKolo(Kolo $kolo)	{		
$this->kola[]=$kolo;
}		
public function addLusterko(Lusterko $lusterko)	{
$this->lusterka[]=$lusterko;		}						 	
public function zmienKolor($nowyKolor)	{
if($this->kolor=='srebrny' && $nowyKolor=='różowy' ){
	echo "tego się nie da zrobić";		
	}		
}
protected function saveToDb()
{		//echo "zapisuję";	}			public function __destruct()	{	 	$this->saveToDb();
	}}

$podwozie = new Podwozie();
$nadwozie = new Nadwozie();

$auto= new Samochod($podwozie,$nadwozie);
$kolo2= new Kolo();
$lusterko= new Lusterko();
$auto->addLusterko($lusterko);
$auto->addKolo($kolo2);

echo "<pre>";
var_dump($auto);
