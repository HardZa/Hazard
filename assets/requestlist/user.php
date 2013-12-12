
        <table border = 0 align="center">
        <?php

            foreach (doc('requests') as $value) {
                echo "<tr><td>".Request::type_to_string($value->get('requesttype'))."</td><td> id : ".$value->get('requestid')."</td>
                <td>Status : ".$value->get_status()."</td>
                <td><a href='".resolveURIHeader("show_request.php?id=".$value->get('requestid'))."'>click</a></td>
                </tr>";
            }
        ?>
        </table>