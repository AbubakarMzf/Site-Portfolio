<?php require "view_begin.php" ?>
<link rel="stylesheet" href=<?='../content/css/skills.css' ?> >




<div class="main">
    <div class="skillBorder">
        <h1 id="title">SKILLS</h1>
    </div>


    <h2 class="title">Current</h2>
    <div class="skillPart">
        <?php foreach ($skill as $s) : ?>
            <div><img alt="" src="/content/images/logo/<?=e($s['sk_name']) ?>.png"/><p><?=e($s['sk_name'])?></p></div>
        <?php endforeach ?>
    </div>
    
    <h2 class="title">Other</h2> 
    <div class="skillPart">
        <div><img alt="" src="/content/images/logo/git.png" /><p>Git</p></div>
        <div><img alt="" src="/content/images/logo/figma.png" /><p>Figma</p></div>
        <div><img alt="" src="/content/images/logo/bootstrap.png" /><p>Bootstrap</p></div>
    </div>

    <h2 class="title">Languages</h2> 
    <div class="skillPart">
        <div><img alt="" src="/content/images/logo/great-britain.png" /><p>English <br> B2/C1</p></div>
        <div><img alt="" src="/content/images/logo/pakistan.png" /><p>Urdu<br>Bilingual</div>
        <div><img alt="" src="/content/images/logo/spain.png" /><p>Spanish</p></div>
    </div>
        
    <h2 class="title">Learning</h2>
    <div class="skillPart"> 
        <div><img alt="" src="/content/images/logo/c.png" /><p>C</p></div>
        <div><img alt="" src="/content/images/logo/javascript.png" /><p>JavaScript</p></div>
    </div>
       
</div>


<?php require "view_end.php" ?>