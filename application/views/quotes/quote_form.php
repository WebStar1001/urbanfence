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
    <h3>Installation Agreement</h3>
</div>
<div class="pagebody">
    <p>Terms agreed on by
        <?php
            echo $quote->company_name;

        ?> and
            <Bialik Hebrew School> (insert relevant Customer name) (“the Customer”) for
                <New Fence and Gate c
                /w Operator> (insert relevant Job_Type value) job at the following job site address:
    </p>

</div>
</body>
</html>