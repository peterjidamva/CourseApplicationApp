<?php
/* @var $this yii\web\View */
$this->title = 'ADMIN SHORT COURSE';
?>
<div class="cards">
        <article class="card">
            <header>
                <h2>Bagamoyo</h2>
            </header>
            <div class="content">
                <p> This list contains a list of courses that are available in bagamoyo and the people that applied the course</p>
            </div>
            <?php $campus1= "Bagamoyo"; ?>
            <footer> <a href="campus.php?campus='<?php echo $campus1 ; ?>'" class="p">view!</a>
        </footer>
        </article>
        <article class="card">
            <header>
                <h2>Dar es salaam</h2>
            </header>
            <div class="content">
            <p> This list contains a list of courses that are available in bagamoyo and the people that applied the course</p>   
        </div>
        <?php $campus2= "Dar es salaam"; ?>
            <footer><a href="campus.php?campus='<?php echo $campus2;?>'"class="p">view!</a> </footer>
        </article>
        <article class="card">
            <header>
                <h2>Applicants</h2>
            </header>
            <div class="content">
                <p>This contains list of all applicants in this season of application</p>
            <p><b>TOTAL APPLICANTS:</b> <?php echo "25";?></p>
            </div>
            <footer><a href="applicants.php" class="p">View!</a></footer>
        </article>
    </div>

    <style>
        img {
            max-width: 100%;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            grid-gap: 20px;
            max-width: 800px;
            margin: 1em auto;
        }

        .card {
            display: grid;
            grid-template-rows: max-content 200px 1fr;
            border: 1px solid #999;
            border-radius: 3px;
        }

        .card img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .card h2 {
            margin: 0;
            padding: .5rem;
        }

        .card .content {
            padding: .5rem;
        }

        .card footer {
            background-color: #333;
            color: #fff;
            padding: .5rem;
        }

        .p{
            
           padding-left:40%;
           padding-right:10%;
           text-decoration:none;
          
            
            
            } 

    </style>