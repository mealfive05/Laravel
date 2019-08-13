


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="/scripts/jquery-1.9.1.min.js"></script>
<script src="/scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="/scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="/styles.css" />
</head>
<body>
    <div class="action-list"></div>
    <div data-role="page" data-add-back-btn="true" data-theme="c">
        <div data-role="header">
            <h1>Employee Details</h1>
        </div>
        <div data-role="content">
            <form method="post" action="/employee/{{ $empp->employeeId }}" class="form-horizontal" data-ajax="false">
                @csrf
                @method('PUT')
                <input type="hidden" name="employeeId" value="3">
                <div data-role="fieldcontain">
                    <label for="firstName">First name:</label>
                    <input type="text" id="firstName" name="firstName" value="{{ $empp->firstName }}" />
                </div>
                <div data-role="fieldcontain">
                    <label for="lastName">Last name:</label>
                    <input type="text" id="lastName" name="lastName" value="{{ $empp->lastName }}" />
                </div>
                <div>....</div>
                <div data-role="fieldcontain">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" value="{{ $empp->email }}" />
                </div>


                <div class="ui-grid-a">
                    <div class="ui-block-a"><input type="submit" name="btnOKCancel" value="OK" /></div>
                    <div class="ui-block-b"><input type="submit" name="btnOKCancel" value="Cancel" /></div>
                </div>
                

            </form>

           


            <ul id="RunTopic">
                <li>文字1</li>
                <li>文字2</li>
                <li>文字3</li>
                <li>文字4</li>
                <li>文字5</li>
                
                </ul>
                <br>
                <input type="button" onclick="test();" value="test">
                <script type="text/javascript">
                function test()
                {
                $("#RunTopic").find("li:first").appendTo($("#RunTopic"));
                }
                </script>
                </body>
        </div>
    </div>
</body>
</html>