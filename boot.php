<div class="bd-example bd-example-row bd-example-row-flex-cols">
<div class="container">
<div class="row  align-items-start border">
    <div class="col">Miloš</div>
    <div class="col">Milica</div>
    <div class="col">Sunčica</div>
</div>
<div class="row align-items-center border border-danger border-3">
    <div class="col-5">Vlada</div>
    <div class="col">Milena</div>
    <div class="col">Sandra</div>
</div>
<div class="row align-items-end border">
    <div class="col-6">Ognjen</div>
    <div class="col">Minja</div>
    <div class="col">Racko</div>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col order-1">Prvi</div>
        <div class="col order-5">Drugi</div>
        <div class="col order-2">Treći</div>
    </div>
</div>

<p>
    <label for="range">Koliko je Miško gay</label>
   0 <input type="range" min="0" max="10" value="5" step="2" step="4" step="6">10
</p>

<div class="bd-example">
    <details>
        <summary>
            <!-- ::marker --> "Some details"
        </summary>
        <p>More info about details</p>
    </details>
</div>
<form action="" method="POST">
    <label for="color">Pick a color</label>
    <input type="color" name="color" id="color" title="izaberi boju">
    <button type="submit" class="btn btn-outline-secondary btn-sm">Save</button>
</form>
<h3>Miloš bio dobar dečko, <small class="text-muted">dok nije počeo da korsiti ATOM</small></h3>
<div>
    <img src="https://www.kurir.rs/data/images/2017/12/01/11/1340769_whatsapp-image-20171201-at-10.58.52_ff.jpg" class="rounded float-start" width="200px" height="200px" alt="mali princ" title="mali princ" >
    <p>Čovek iz naroda</p>
</div>

<select name="sport" id="sport" >
    <option selected>Ovaj čovek je: </option>
    <option value="gej">Gej</option>
    <option value="peder">Gospodin</option>
    <option value="gej">Bard novinarstva</option>
</select>

<input type="range" id="rangeInput" name="rangeInput" min="0" max="20" value="0"
       oninput="amount.value=rangeInput.value">                                                       

<output id="amount" name="amount" for="rangeInput">0</output>
<form action="post.php" method="POST">
    <h1>Plese insert values</h1>
    <input type="text" name="name" placeholder="Your name" class="form-control">
    <input type="number" name="grade" placeholder="Your grade" class="form-control">
    <input type="range" name="range"  min="0" max="10" >
    <button type="submit" class="btn btn-secondary btn-lm">Save</button>
</form>