<div class="titulo">Desafio Precedência</div>
<style>
    .resp {
        display: none;
    }
    
    button {
        font-size: 1.5rem;
        font-weight: 300;
        background-color: dodgerblue;
        border: none;
        border-radius: 2px;
        color: #fff;
    }
</style>

<p>1. Qual valor será impresso?</p>
<span class="pergunta">2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3) = </span>
<div class="resp um">
    <?php
        echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
    ?>
</div>

<div>
    <button class="botao" id="um">Ver Resposta</button>
</div>

<p>2. Qual expressão imprime o valor 100?</p>
<span>a) (1 + 2) * 20 - 15 = </span>
<div class="resp dois">
    <?php
        echo (1 + 2) * 20 - 15;
    ?>
</div><br>
<span>b) 4 * 5 ** 2 = </span>
<div class="resp dois">
    <?php
        echo 4 * 5 ** 2;
    ?>
</div><br>
<span>c) 2 ** 3 ** 4 / 1e25 = </span>
<div class="resp dois">
    <?php
        echo 2 ** 3 ** 4 / 1e25;
    ?>
</div><br>
<span>d) 3 + (3 * 8) / 2 - 3 = </span>
<div class="resp dois">
    <?php
        echo 3 + (3 * 8) / 2 - 32;
    ?>
</div><br>

<div>
    <button class="botao" id="dois">Ver Resposta</button>
</div>


<script>
    document.querySelectorAll('.botao').forEach(el => {
        el.onclick = function() {
            const id = el.id
            document.querySelectorAll(`.${id}`).forEach(el =>{
                el.style.display = 'inline';
                if(el.innerHTML == 100) {
                    el.style.fontWeight = "600";
                    el.style.fontSize = 'larger';
                }
            })
        }
    })
</script>