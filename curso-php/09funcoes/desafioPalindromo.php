<div class="titulo">Desafio Palíndromo</div>

<?php
    function isPalindrome($word) {
        $letters = preg_split('//u', $word, null, PREG_SPLIT_NO_EMPTY);
        
        foreach($letters as $letter) {
            withoutAccent($letter);
        }

        $quantLetters = count($letters);
        $notMatching = 0;
        for($i = 0; $i < $quantLetters/2; $i++){
            if($letters[$i] != $letters[($quantLetters - 1) - $i]) {
                $notMatching++;
            }
        }

        return $notMatching == 0 ? "Palíndromo" : "Não Palíndromo";
    }

    function withoutAccent(&$letter) {
        switch(strtolower($letter)) {
            case 'á': case 'à': case 'â': case 'ã':
                $letter = 'a';
                break;
            case 'é': case 'ê':
                $letter = 'e';
                break;
            case 'í':
                $letter = 'i';
                break;
            case 'ó': case 'õ': case 'ô':
                $letter = 'o';
                break;
            case 'ú':
                $letter = 'u';
                break;
            case 'ç':
                $letter = 'c';
                break;
        }
    }
    echo isPalindrome('posop');
?>
