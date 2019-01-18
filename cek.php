<?php
class hitung{
    public $berats;
    public $tinggis;
    public $jks;
    public $beratideal;

    public function set()
    {
       if($_POST['submit']=="submit"){
        $this->berats = $_POST['berat'];
        $this->tinggis= $_POST['tinggi'];
        $this->jks = $_POST['jk'];
        $this->beratideal = ($this->berats/($this->tinggis*$this->tinggis))*10000;
        echo $this->beratideal;
       }
       include 'tampil.php';
      

    }

    public function kalsifikasi()
    {
        # code...
        $kalsifikasi;
        if($this->jks =="pr"){
            if($this->beratideal<18){
                $kalsifikasi="Under weight/Kurus";
            }
            elseif($this->beratideal>=18 && $this->beratideal<25){
                $kalsifikasi="Normal weight/Normal";
            }
            elseif($this->beratideal>=25 && $this->beratideal<27){
                $kalsifikasi="Over weight/Kegemuka";
            }
            elseif($this->beratideal>27){
                $kalsifikasi="Obesitas";
            }
        }
        else{
            if($this->beratideal<17){
                $kalsifikasi="Under weight/Kurus";
            }
            elseif($this->beratideal>=17 && $this->beratideal<23){
                $kalsifikasi="Normal weight/Normal";
            }
            elseif($this->beratideal>=23 && $this->beratideal<27){
                $kalsifikasi="Over weight/Kegemuka";
            }
            elseif($this->beratideal>27){
                $kalsifikasi="Obesitas";
            }

        }

        return $kalsifikasi;
    }

}



?>