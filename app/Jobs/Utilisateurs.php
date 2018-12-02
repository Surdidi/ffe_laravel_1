<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Utilisateurs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
     private $id ;
    private $nom ;
    private $prenom ;
    private $ville ;
    private $cp ;
    private $rue ;
    private $mdp ;
    private $mail ;
    private $rib;
    private $role ;
    private $tel ;
    private $id_club ;

    public function __construct($id,$nom,$ville,$cp,$rue,$mdp,$mail,$rib,$role,$tel,$id_club)
    {
        $this->id = $id ;
        $this->nom = $nom ;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->rue = $rue ;
        $this->mdp = $mdp ;
        $this->mail = $mail ;
        $this->rib = $rib ;
        $this->role = $role ;
        $this->tel = $tel ;
        $this->id_club = $id_club ;
    }

    public function getNom(){
      return this->nom;
    }




    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
