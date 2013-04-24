//1.modyfikatory dostępu:
//2.Private
//3.Protected
//4.Public 
//6. Metody  i właściwości obiktu, metody i właściwośći Klasy; definiowanie i wywołanie
//7. Metody magiczne
//8. programowanie w oparciu o gettery i settery

class Dom
{

 //protected - dostepna dla dzieci obiektu
 //private -nie dostepna dla dzieci obiektu
 //public - dostepna ogólnie (poza klasa)
 //przeciazenie metod - nadpisanie starej metody nowa

//Mozna rozszezyc dostep zasiegu dla dzieci ale nie zawezyc 

protected $cena=null; //22.44;
 
 public function setCena($cena) //setter
 {
  if(is_numeric($cena) && $cena>=10)
  {
   $this->cena=$cena;
   
  }
  else
  {
   throw new Exception('Cena to liczba gamoniu');
  }
  
 }
 
 
 public function getCena()//getter
 {
 
  return $this->cena;
 
 }
 
 
}


class BardzoWielkiDom extends Dom
{
 public function pokazCeneWielkiegoDomu()
 {
  return $this->cena;
 }
}



//////////////////////////////////////////////////

$dom=new BardzoWielkiDom();
//$dom->cena='aaaa';
//$dom->setCena(11);
echo $dom->pokazCeneWielkiegoDomu();

abstract class Document
{
 public $text='jakis tekst';
 abstract protected function render();

}


class HtmlDocument extends Document
{
   public static $counter=0;
	
	public static function sayhello(){
		echo self::$counter;
	} 
	
	
	
	
 public  function render()
 {
  self::$counter++;
  echo "<h1>".$this->text."</h1>";
 self::sayhello();
 }
}


class DiffrendHtmlDocument extends HtmlDocument
{
 public  function render()
 {
  echo "<h3>".$this->text."</h3>";
 }
}




class CsvDocument extends Document
{
 protected function render()
 {
  echo $this->text.";";
 }
 
}


/*$document= new HtmlDocument();
$document->render();
$document->render();
$document->render();
$document->render();
$document->render();
$document->render();
echo HtmlDocument::$counter;*/

HtmlDocument::sayhello();

