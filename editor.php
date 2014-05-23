<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap Live Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">





	<link rel="stylesheet" type="text/css" href="editor/css/bootstrap.min.css">

	<!----------------------------------------
    //AGREGAR
    ----------------------------------------->
    <link rel="stylesheet" type="text/css" href="editor/bootstrap/bootstrap_extend.css">
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <!----------------------------------------
    //AGREGAR
    ----------------------------------------->
    
    
    
    
    
</head>
<body>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <textarea id="content" rows="4" cols="30"></textarea>
        </div>
    </div>
</div>


<script src="editor/js/jquery-1.11.0.min.js"></script>
<script src="editor/js/bootstrap.min.js"></script>


<!----------------------------------------
//AGREGAR
----------------------------------------->
<script src="editor/scripts/innovaeditor.js"></script>
<script src="editor/scripts/innovamanager.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" type="text/javascript"></script>
<script src="scripts/common/webfont.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#content').liveEdit({
            height: 350,
            css: ['editor/bootstrap/css/bootstrap.min.css', 'editor/bootstrap/bootstrap_extend.css'] /* Apply bootstrap css into the editing area */,
            groups: [
                    ["group1", "", ["Bold", "Italic", "Underline", "ForeColor", "RemoveFormat"]],
                    ["group2", "", ["Bullets", "Numbering", "Indent", "Outdent"]],
                    ["group3", "", ["Paragraph", "FontSize", "FontDialog", "TextDialog"]],
                    ["group4", "", ["LinkDialog", "ImageDialog", "TableDialog", "Emoticons", "Snippets"]],
                    ["group5", "", ["Undo", "Redo", "FullScreen", "SourceDialog"]]
                    ] /* Toolbar configuration */
        });

        $('#content').data('liveEdit').startedit();
    });


    function save() {
        var sHtml = $('#content').data('liveEdit').getXHTMLBody(); //Use before finishedit()
        alert(sHtml); /*You can use the sHtml for any purpose, eg. saving the content to your database, etc, depend on you custom app */

        var sHtml2 = $('#content2').data('liveEdit').getXHTMLBody();
        alert(sHtml2); 
    }
</script>

<!----------------------------------------
//AGREGAR
----------------------------------------->

</body>
</html>