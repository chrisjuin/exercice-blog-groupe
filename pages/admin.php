<hr />
<div class="row">
    <div class="col-sm-3">
        <h3>Filtre</h3>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-12">
        <form action="#" method="post">
        <!-- Ici sont situés les labels -->
            <div class="row">
                <div class="col-sm-2">
                    <label for="titre">Titre</label>
                </div>
                <div class="col-sm-2">
                    <label for="genre">Genre</label>
                </div>
            </div>
        <!-- Ici sont situé les inputs -->
            <div class="row">
                <div class="col-sm-2">
                    <input class="form-control" name="title" id="titre" type="text">
                </div>
                <div class="col-sm-2">
                    <select id="genre" class="form-control col-sm-12">
                        <option value="Test1">Test1</option>
                        <option value="Test2">Test2</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <input class="btn btn-default"type="submit" value="valider">
                </div>
            </div>
        </form>
        <hr />
    </div>
</div>
<!-- Partie avec le tableau -->
<div class="row">
    <div class="col-sm-12">
        <table class="table table bordered">
            <thead>
                <tr>
                    <th class="col-sm-1">ID</th>
                    <th class="col-sm-1">Genre</th>
                    <th class="col-sm-8">Titre</th>
                    <th class="col-sm-1">Editer</th>
                    <th class="col-sm-1">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
</div>