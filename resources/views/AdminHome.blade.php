@extends('app')

@section('content')

    <div id="editor" style="height: 100%;width: 100%;margin-top: 51px;">
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.2/ace.js" type="text/javascript"
            charset="utf-8"></script>
    <script>
        //set editor height
        $('#editor').css('height', $(window).height() - 51);

        //initialize editor
        var editor = ace.edit("editor");
        editor.setTheme('ace/theme/eclipse');
        editor.getSession().setMode("ace/mode/markdown");
        editor.setHighlightActiveLine(true);
        editor.commands.addCommand({
            name: 'submit',
            bindKey: {win: 'Ctrl-R', mac: 'Command-R'},
            exec: function (editor) {
                submit_code();
            },
            readOnly: true // false if this command should not apply in readOnly mode
        });
    </script>
@endsection

@section('control_panel'){!! $control_panel !!}@endsection

@section('control_panel_js')
    <script>
        function submit_code() {
            var codes = ace.edit("editor").getValue();
//            alert(codes);
            $.ajax({
                url: "{{ URL('submit') }}",
                type: 'POST',
                data: {code:codes},
                dataType:'json',
                success: function (data) {
                    alert(data);
                    console.log(data);
                },
                error: function () {
                    alert('post error');
                }
            });
        }

        function themes(theme) {
            ace.edit("editor").setTheme("ace/theme/" + theme);
        }

        function languages(language) {
            //工作机制还不清楚。。。
//            ace.edit("editor").getSession().setMode("ace/mode/" + language);
        }

        function set_font_size(font_size) {
            $('#editor').css('size', font_size + 'px');
//            document.getElementById('editor').style.fontSize = font_size + 'px';
        }
    </script>
@endsection