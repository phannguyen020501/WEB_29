<html>
    <head>
        <title>THREE-COLUMN LIQUID LAYOUT WITH FLOATING BOXES</title>
        <style type="text/css">
        <!--
        body {
        margin: 0px;
        padding: 0px;
        }
        #header {
        background: red;
        width: 700px;
        }
        #rightcol {
        background: yellow;
        float: right;
        width: 200px;
        height:500px;
        }
        #content {
        background: #fff;
        float: left;
        width: 500px;
        height: 500px;
        }
        #footer {
        background: blue;
        clear: both;
        width: 700px;
        color: white;
        }
        -->
        </style>
    </head>
<body>
    <div id="header">Header content</div>
    <div style="display: flex;">
    <div id="content">
    <p style="font-size: 48px">Main content</p></div>
    <div id="rightcol"><p>Sidebar contentSidebar contentSidebar contentSidebar content</p></div>
    </div>
    <div id="footer">Footer Section</div></body>
</html>