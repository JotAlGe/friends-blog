<div class="row justify-content-center">
    <div class="col-md-offset-3 col-md-7 col-xs-12">
        <div class="well well-sm well-social-post">
            <form>
                {{-- post --}}
                <textarea class="form-control" placeholder="Escribe algo..."></textarea>
                <ul class='list-inline post-actions'>
                    <li><a href="#"><span class="glyphicon glyphicon-camera"></span></a></li>
                    <li><a href="#" class='glyphicon glyphicon-user'></a></li>
                    <li><a href="#" class='glyphicon glyphicon-map-marker'></a></li>
                    <li class='pull-right mb-3 mt-1'>
                        <x-form.input type="submit" class="btn btn-theme"
                            style="background-color: #1e7a5d; color: white;" value="Publicar" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
