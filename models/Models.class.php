<?php
class  Mode
{
    private const host='localhost';
    private const port='3308';
    private const dbname='ecole';
    private const users='root';
    private const pass='';
    private $db;
        public function __construct()
    {

        try{
        $this->db = new PDO('mysql:host='.self::host.';port='.self::port.';dbname='.self::dbname.';charset=utf8', self::users, self::pass);
            return $this->db;
            }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
            }

        }
        public function ajouterEleve($nom,$prenoms,$classe){
            $inserteleve=$this->db->prepare('INSERT INTO eleve(nom,prenoms,classe) VALUES (?,?,?)');
            // var_dump( $inserteleve);
            // exit;
            if($inserteleve->execute(array($nom,$prenoms,$classe))==true)
                return 1;
            else
                return 0;
        
        }

        public function listEleve(){
            $inserteleve=$this->db->query('SELECT * FROM eleve');
            return $inserteleve->fetchAll();
        
        }

        public function ajouterMatiere($nom,$professeur,$coefficient){
            $inserteleve=$this->db->prepare('INSERT INTO matiere(nom,professeur,coefficient) VALUES (?,?,?)');
            if($inserteleve->execute(array($nom,$professeur,$coefficient))==true)
                return 1;
            else
                return 0;
        
        }

        public function listMatiere(){
            $insertmatiere=$this->db->query('SELECT * FROM matiere');
            return $insertmatiere->fetchAll();
        
        }

        public function ajouterNote($id_eleve,$id_matiere,$note){
            $insertnote=$this->db->prepare('INSERT INTO evaluer(id_eleve,id_matiere,note,date_compo) VALUES (?,?,?,now())');
            if($insertnote->execute(array($id_eleve,$id_matiere,$note))==true)
            
                return 1;
            else
                return 0;
    }
    
    public function listNote(){
        $insertnote=$this->db->query('SELECT eleve.nom,eleve.prenoms AS id_eleve, matiere.nom AS id_matiere,note,date_compo FROM evaluer JOIN eleve ON evaluer.id_eleve=eleve.id JOIN matiere ON evaluer.id_matiere=matiere.id ');
        return $insertnote->fetchAll();
    }

    public function supprimerEleve($id_eleve){
        $deleteleve=$this->db->prepare('DELETE FROM eleve WHERE id=? ');
        if($deleteleve->execute(array($id_eleve))==true)
            
        return 1;
    else
        return 0;
    }
    public function supprimerMatiere($id_matiere){
        $deletematiere=$this->db->prepare('DELETE FROM matiere WHERE id=? ');
        if($deletematiere->execute(array($id_matiere))==true)
            
        return 1;
    else
        return 0;
    }

    public function ListCinqMeilleurEleve(){
        
        $listcinqmeilleur=$this->db->query('SELECT eleve.nom,eleve.prenoms AS id_eleve,AVG(note) AS moyenne  FROM evaluer JOIN eleve ON evaluer.id_eleve=eleve.id GROUP BY id_eleve ORDER BY moyenne DESC LIMIT 5');
        
        return $listcinqmeilleur->fetchAll();
    }

    public function ListCinqMeilleurNote(){
        
        $listcinqmeilleurnote=$this->db->query('SELECT eleve.nom,eleve.prenoms AS id_eleve,matiere.nom AS matiere, note   FROM evaluer JOIN eleve ON evaluer.id_eleve=eleve.id JOIN matiere ON evaluer.id_matiere=matiere.id  ORDER BY note DESC LIMIT 5');
        
        return $listcinqmeilleurnote->fetchAll();
    }

    public function listNoteParMatiere($id_matiere){
        $listnotparmatiere=$this->db->query('SELECT matiere.nom AS matiere,note FROM evaluer JOIN matiere ON evaluer.id_matiere=matiere.id WHERE id_matiere='.$_GET['id_matiere']);
        return $listnotparmatiere->fetchAll();
       
    }

    public function listNoteParEleve($id_eleve){
        $listnotpareleve=$this->db->query('SELECT eleve.nom,eleve.prenoms,note FROM evaluer JOIN eleve ON evaluer.id_eleve=eleve.id WHERE id_eleve='.$_GET['id_eleve']);
        return $listnotpareleve->fetchAll();
       
    }

 }
 ?>