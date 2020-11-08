<html>
<head>
    <style type="text/css" media="all">
        @page {
            size: A4 portrait; /* can use also 'landscape' for orientation */
            margin: 1.0in;
            border: thin solid black;
            padding: 1em;

            @bottom-center {
                content: element(footer);
            }

            @top-center {
                content: element(header);
            }
        }

        div.pageheader {
            display: block;
            position: running(header);
        }

        div.pagefooter {
            display: block;
            position: running(footer);
        }

        #pagenumber:before {
            content: counter(page);
        }

        #pagecount:before {
            content: counter(pages);
        }
    </style>
</head>

<body>
<div class="pageheader">
    <h1>Header text</h1>
</div>

<div class="pagefooter">
    <p>Footer text</p>
    <p>Page <span id="pagenumber"/> of <span id="pagecount"/></p>
</div>

<div class="pagebody">
    <p>Page 1.</p>

    <p style="page-break-after:always;"/>

    <p>Page 2.</p>
</div>
</body>
</html>