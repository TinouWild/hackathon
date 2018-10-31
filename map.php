<?php include('head.php') ?>

    <div class="bg"></div>
    <div class="lightning flashit"></div>

<div class="container" style="margin-top: 100px;">
    <iframe src="https://www.google.com/maps/d/embed?mid=1mtk2SgP7ZCgDJLee-NbXumynZcraKw7S&hl=fr" width="100%" height="600"></iframe>
</div>

    <script language="JavaScript">
        var nbCheck = 0;

        function isChecked(elmt)
        {
            if( elmt.checked )
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        function clickCheck(elmt)
        {
            if( (nbCheck < 10) || (isChecked(elmt) == false) )
            {
                if( isChecked(elmt) == true )
                {
                    nbCheck += 1;
                }
                else
                {
                    nbCheck -= 1;
                }
            }
            else
            {
                elmt.checked = '';
            }
        }
    </script>

<div class="container mt-4";">
    <fieldset id="formulaire">
        <legend align="center">Choisissez 10 adresses !</legend>
    <div class="row">
        <div class="col-2">
            <div>
                <input type="checkbox" value="check1" onclick="clickCheck(this);"/>
                <label for="check1">Adresse 1</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check2" onclick="clickCheck(this);"/>
                <label for="check2">Adresse 2</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check3" onclick="clickCheck(this);"/>
                <label for="check3">Adresse 3</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check4" onclick="clickCheck(this);"/>
                <label for="check4">Adresse 4</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check5" onclick="clickCheck(this);"/>
                <label for="check5">Adresse 5</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check6" onclick="clickCheck(this);"/>
                <label for="check6">Adresse 6</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <div>
                <input type="checkbox" value="check7" onclick="clickCheck(this);"/>
                <label for="check7">Adresse 7</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check8" onclick="clickCheck(this);"/>
                <label for="check8">Adresse 8</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check9" onclick="clickCheck(this);"/>
                <label for="check9">Adresse 9</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check10" onclick="clickCheck(this);"/>
                <label for="check10">Adresse 10</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check11" onclick="clickCheck(this);"/>
                <label for="check11">Adresse 11</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check12" onclick="clickCheck(this);"/>
                <label for="check12">Adresse 12</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <div>
                <input type="checkbox" value="check13" onclick="clickCheck(this);"/>
                <label for="check13">Adresse 13</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check14" onclick="clickCheck(this);"/>
                <label for="check14">Adresse 14</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check15" onclick="clickCheck(this);"/>
                <label for="check15">Adresse 15</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check16" onclick="clickCheck(this);"/>
                <label for="check16">Adresse 16</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check17" onclick="clickCheck(this);"/>
                <label for="check17">Adresse 17</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check18" onclick="clickCheck(this);"/>
                <label for="check18">Adresse 18</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <div>
                <input type="checkbox" value="check19" onclick="clickCheck(this);"/>
                <label for="check19">Adresse 19</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check20" onclick="clickCheck(this);"/>
                <label for="check20">Adresse 20</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check21" onclick="clickCheck(this);"/>
                <label for="check21">Adresse 21</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check22" onclick="clickCheck(this);"/>
                <label for="check22">Adresse 22</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check23" onclick="clickCheck(this);"/>
                <label for="check23">Adresse 23</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check24" onclick="clickCheck(this);"/>
                <label for="check24">Adresse 24</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <div>
                <input type="checkbox" value="check25" onclick="clickCheck(this);"/>
                <label for="check25">Adresse 25</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check26" onclick="clickCheck(this);"/>
                <label for="check26">Adresse 26</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check27" onclick="clickCheck(this);"/>
                <label for="check27">Adresse 27</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check28" onclick="clickCheck(this);"/>
                <label for="check28">Adresse 28</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check29" onclick="clickCheck(this);"/>
                <label for="check29">Adresse 29</label>
            </div>
        </div>
        <div class="col-2">
            <div>
                <input type="checkbox" value="check30" onclick="clickCheck(this);"/>
                <label for="check30">Adresse 30</label>
            </div>
        </div>
    </div>
    </fieldset>
</div>

<br>

<div class="container d-flex justify-content-center" style="margin-bottom: 100px;">
    <a class="btn btn-danger" href="portes.php" role="button">Faire votre tournée d'Halloween</a>
</div>

<?php include('footer.php') ?>