interface Czlowiek
{
 public function machajReka();
 public function machajNoga();
 public function powtorzCoPowiedzialem($slowo);
}


class Czlowiek
{
 public $nogi=2;
 public $rece=2;

}


class Michal implements Czlowiek
{

 public function machajReka(){
 
  echo "machamReka!<br/>";
 }
 
 public function machajNoga(){
 
 echo "machamNoga!<br/>";
 
 }
 
 public function powtorzCoPowiedzialem($slowo)
 {
  echo $slowo;
 }
}


class Mariusz implements Czlowiek
{

 public function machajReka(){
 
  echo "machamReka, ale krzywo!<br/>";
 }
 
 public function machajNoga(){
 
 echo "machamNoga, ale słabo!<br/>";
 
 }
 
 public function powtorzCoPowiedzialem($slowo)
 {
  echo $slowo.$slowo;
 }
}



class Robot implements Czlowiek
{
 public function machajReka(){
 
  echo "machamReka!<br/>";
 }
 
 public function machajNoga(){
 
 echo "machamNoga!<br/>";
 
 }
 
 public function powtorzCoPowiedzialem($slowo)
 {
  echo $slowo;
 }

}

class DupaJasiuKaruzela implements Czlowiek
{

public function machajReka(){
 
  echo "machamReka!<br/>";
 }
 
 public function machajNoga(){
 
 echo "machamNoga!<br/>";
 
 }
 
 public function powtorzCoPowiedzialem($slowo)
 {
  echo $slowo;
 }


}




class Lew{




 public function zjedzCzlowieka(Czlowiek $czlowiek)
 {
  $czlowiek->powtorzCoPowiedzialem('Grrr');
  echo "smaczny czlowiek"; 
 
 }
}


$lew= new Lew();

$czlowiek=new Michal();
$czlowiek2= new Mariusz();
$robot=new DupaJasiuKaruzela();


$lew->zjedzCzlowieka($robot);
