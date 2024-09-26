<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
            .no_page_found_dib {
                text-align: center;
            }
            .no_page_found_dib img {
                width: 50%;
                mix-blend-mode: multiply;
                filter: contrast(1);
                height: 95%;
            }
        </style>
    </head>
    <body>
        <div class="no_page_found_dib">

            <div class="mb-5 ">
                <img
                    alt=""
                    src="<%base_url('')%>public/assets/images/403.png"
                    height="150"
                    width="150"
                    class="mt-5"/>
                <br>
                <br>
                <a type="button" class="btn btn-outline-info" href="<%base_url('dashboard')%>">
        				Back To Home
        		</a>

            </div>
        </div>
    </body>
</html>