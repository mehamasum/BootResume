<!-- top navigation -->
<script>
    function copyToClipboard() {

        var elem = document.getElementById("sharable_link");
        elem.setSelectionRange(0, elem.value.length);


        // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
            // can just use the original source element for the selection and copy
            target = elem;
            origSelectionStart = elem.selectionStart;
            origSelectionEnd = elem.selectionEnd;
        } else {
            // must use a temporary form element for the selection and copy
            target = document.getElementById(targetId);
            if (!target) {
                var target = document.createElement("textarea");
                target.style.position = "absolute";
                target.style.left = "-9999px";
                target.style.top = "0";
                target.id = targetId;
                document.body.appendChild(target);
            }
            target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);

        // copy the selection
        var succeed;
        try {
            succeed = document.execCommand("copy");
        } catch(e) {
            succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
            currentFocus.focus();
        }

        if (isInput) {
            // restore prior selection
            elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
            // clear temporary content
            target.textContent = "";
        }

        if(succeed) {
            new PNotify({
                title: 'Link copied to clipboard',
                type: 'success',
                styling: 'bootstrap3'
            });
        }

        return succeed;
    }
</script>

<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['user']?>  <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="help.php">Help</a></li>
                        <li><a href="mailto:team.batfia@gmail.com?subject=Elegant Resume Feedback">Feedback</a></li>
                        <li><a href="https://devpost.com/mehamasum">About Us</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>


                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-share-alt"></i> Share
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li style="background-color: white">
                            <input id="sharable_link" type="text" class="form-control"
                                   onClick="this.setSelectionRange(0, this.value.length)"
                                   value="http://bitnami-lampstack-6f53.cloudapp.net/ElegantResume/resume/<?php echo $_SESSION['user']?>">
                        </li>

                        <li style="background-color: white; padding: 5px;">
                            <button onclick="copyToClipboard()" class="btn btn-primary btn-block">
                                Copy
                            </button>
                        </li>
                    </ul>
                </li>

                <li><a target="_blank" href="../profile.php?u=<?php echo $_SESSION['user']?>"><i class="fa fa-globe"></i> Live</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->