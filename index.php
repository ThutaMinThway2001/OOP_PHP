<?php
    //parent
    class Team{
        public function money(){
            var_dump("Team's Money");
        }
    }
    //child
    class Department extends Team{
        public function useMoney(){
            var_dump("Use Money");
        }
    }

    (new Department())->money();

?>