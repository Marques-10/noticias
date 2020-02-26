<?php 
    // Requisições e querys do banco de dados
    class About extends Model {

        public function getAbout() {
        
            $sql = "SELECT * FROM about";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
        
                $sql = $sql->fetchAll();
                return $sql;
        
            } else {
        
                return "";
        
            }

        }

        public function saveNotice($title, $about, $notice) {

            $sql = $this->db->prepare("INSERT INTO notices SET title = :title, about = :about, notice = :notice");
            $sql->bindValue(":title", $title);
            $sql->bindValue(":about", $about);
            $sql->bindValue(":notice", $notice);
            $sql->execute();

        }

        public function getAll($about) {
            $sql = "SELECT * FROM notices WHERE about = $about";
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
                
                $sql = $sql->fetchAll();
                return $sql;

            } else {

                switch($about) {
                    case 1:
                        return "Nenhuma notícia de esportes foi encontrada!";
                    break;
                    case 2:
                        return "Nenhuma notícia de economia foi encontrada!";
                    break;
                    case 3:
                        return "Nenhuma notícia de tecnologia foi encontrada!";
                    break;
                    case 4:
                        return "Nenhuma notícia de eventos foi encontrada!";
                    break;
                    default: 
                    return "Não há noticias!";
                
                }

            }

        }

    }