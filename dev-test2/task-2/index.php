<?php

    class Path
    {
        public $currentPath;

        function __construct($path)
        {
            $this->currentPath = $path;
        }

        public function cd($newPath)
        {
            $newPathArray = str_split($newPath);
            if($newPathArray[0] == '/')
                $this->currentPath = $newPath;
            else {
                $newPathExploded = explode('/', $newPath);
                foreach ($newPathExploded as $step) {
                    switch ($step) {
                        case '..':
                            $this->currentPath = substr_replace($this->currentPath, "", -2);
                            break;
                        default:
                            if($step != '.')
                                $this->currentPath .= '/'.$step;
                            break;
                    }
                }
            }

        }
    }