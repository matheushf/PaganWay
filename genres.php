<?php
include ('head.php');
?>            
<div class="container-fluid">    
    <div class="row content">
        <div class="col-sm-2 sidenav">

            <div class="menu">
                <ol class="parent">
                    <li><a href="#">First Parent</a>
                        <ol class="child">
                            <li><a href="#">Child 1</a></li>
                            <li>Child 2</li>
                            <li>Child 3</li>
                        </ol>
                    </li>

                    <li><a href="#">Second Parent</a> 
                        <ol class="child">
                            <li>Child 1</li>
                            <li><a href="#">Child 2</a></li>
                        </ol>
                        </a>

                    <li><a href="#">Third, no children</a></li>
                </ol>   
            </div>
        </div>

        <!-- Content -->  
        <div class="col-sm-10 text-left"> 
            <h1>Welcome</h1>

        </div>
    </div>
</div>


<!-- Footer -->    
<?php
include 'foot.php';
?>