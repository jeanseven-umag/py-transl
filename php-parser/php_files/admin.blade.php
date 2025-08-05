@extends('layouts.app')
@section('content')
<link rel=stylesheet href="lib/codemirror.css">
<script src="lib/codemirror.js"></script>
<script src="mode/xml/xml.js"></script>
<script src="mode/javascript/javascript.js"></script>
<script src="mode/css/css.js"></script>
<script src="mode/htmlmixed/htmlmixed.js"></script>
<script src="addon/edit/matchbrackets.js"></script>
<script src="addon/display/fullscreen.js"></script>
<script src="lib/emmet.js"></script>
<link rel="stylesheet" href="addon/display/fullscreen.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Страница добавления товара</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form id="addItem" action="">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Название товара</label>
                            <input name="eq_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Введите название товара">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Цена</label>
                            <input name="eq_price" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Введите цену">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Скидка если есть</label>
                            <input name="eq_sale" type="text`" class="form-control" id="exampleFormControlInput3" placeholder="Введите название товара">
                            <small id="emailHelp" class="form-text text-muted">Оставьте поле пустым если отсуствует скидка на товар</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">url будушего товара</label>
                            <input name="eq_url" type="text" class="form-control" id="exampleFormControlInput4" placeholder="Введите url">
                            <small id="emailHelp" class="form-text text-muted">Придумайте url для вашего товара</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput5">Видео обзор</label>
                            <input name="eq_video" type="text" class="form-control" id="exampleFormControlInput5" placeholder="Введите id video">
                            <small id="emailHelp" class="form-text text-muted">ID видео на youtube</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput6">Префикс изображения</label>
                            <input name="eq_image" type="text" class="form-control" id="exampleFormControlInput6" placeholder="Название изображения">
                            <small id="emailHelp" class="form-text text-muted">ID видео на youtube</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea2">Описание товара</label>
                            <textarea name="eq_descript" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Выберите категорию товара</label>
                                <select name="eq_category" class="form-control" id="exampleFormControlSelect1">
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->type}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Не убирать русские буквы</label>
                            <select name="eq_rgx" class="form-control" id="exampleFormControlSelect2">
                                <option value="no">Да</option>
                                <option value="">Нет</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Технические характеристики</label>
                            <textarea id="html" name="eq_html" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>



    $('a#navbarDropdown').click((() => {
        let count = false, val = 'none';
        return () => {
            count=!count;
            count ? val = 'block' : val = 'none';
            $('div.dropdown-menu').css('display', val);
        };
    })());
    
    var editor = CodeMirror.fromTextArea(document.getElementById("html"), {
      lineNumbers: true,
      mode: "text/html",
      matchBrackets: true,
      extraKeys: {
        "F11": function(cm) {
          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
        },
        "Esc": function(cm) {
          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
        }
      }
    });
    $('#exampleFormControlInput2, #exampleFormControlInput3').keyup(function(){
        var lol = $(this).val().replace(/\s/g, "");
        $(this).val(  numberWithSpaces(lol)  );
    });
    function numberWithSpaces(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        return parts.join(".");
    }
    emmetCodeMirror(editor);
        $("#addItem").on("submit", function(e){
            e.preventDefault();
            let $form = $(this);
            let serializedData = $form.serialize();
            let request = $.ajax({
                url: '/ckjmopcpokqckxskpxskpxzksaxmsaplkkxsaskaopxaspokxpaslkxplsakxaskxalxksaxkosajxko',
                type: "post",
                data: serializedData
            });

            request.done(function (response, textStatus, jqXHR){
                console.log(response);
            });

            request.fail(function (jqXHR, textStatus, errorThrown){
                $form.find("[data-error-message]").show();
                console.error(
                    "The following error occurred: "+
                    textStatus, errorThrown
                );
            });
        });
</script>
@endsection
