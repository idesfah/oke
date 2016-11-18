<div class="row demo-row">
    <div class="col-xs-12">
        <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand" href="#">SIAA</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">

<?php
                if (!isset($_SESSION["login"])) {
                    ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?menu=1">Daftar</a></li>
                </ul>
                <?php }?>
                <?php
                if (isset($_SESSION["login"])) {
                    ?>

                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#fakelink">Menu Item</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                            <span class="dropdown-arrow"></span>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>

                            </ul>
                        </li>
                        <li><a href="#fakelink">About Us</a></li>

                    </ul>
                <?php } ?>
            </div><!-- /.navbar-collapse -->
        </nav><!-- /navbar -->
    </div>
</div>
