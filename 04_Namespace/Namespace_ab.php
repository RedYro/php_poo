<?php
    // namespace : on peut y stocker des "méthodes" et des "class", considéré comme un "dossier virtuel"
    
    namespace A{
        function ville(){
            return "<p>Paris</p>";
        }

        function strlen(){
            return "<p>Fonction strlen de A</p>";
        }
    }

    //----------------------------------------------------------------
    
    namespace B{
        function ville(){
            return "<p>Nante</p>";
        }

        function strlen(){
            return "<p>Fonction strlen de B</p>";
        }
    }
?>