<button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button"
        class="btn btn-primary btn-sm d-none d-md-inline-block"><i class="fa fa-cog fa-2x"></i></button>
<div id="style-switch" class="collapse">
    <h5 class="mb-3">Select theme colour</h5>
    <form class="mb-3">
        <select name="colour" id="colour" class="form-control">
            <option value="">select colour variant</option>
            <option value="default.premium">violet</option>
            <option value="red.premium">red</option>
            <option value="green.premium">green</option>
            <option value="pink.premium">pink</option>
            <option value="sea.premium">sea</option>
            <option value="blue.premium">blue</option>
        </select>
    </form>
    <p><img src="{{asset('img/template-mac.png')}}" alt=""
            class="img-fluid"></p>
    <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads.
        This will not happen in your production code.</p>
</div>