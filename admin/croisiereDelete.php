<?php include 'include/header.php';
function redirectHome($theMsg, $url = null, $seconds = 3) {

    if ($url === null) {

        $url = 'index.php';

        $link = 'Homepage';

    } else {

        if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {

            $url = $_SERVER['HTTP_REFERER'];

            $link = 'Previous Page';

        } else {

            $url = 'index.php';

            $link = 'Homepage';

        }

    }

    echo $theMsg;

    echo "<div class='alert alert-info'>You Will Be Redirected to $link After $seconds Seconds.</div>";

    header("refresh:$seconds;url=$url");

    exit();

}

/*
** Check Items Function v1.0
** Function to Check Item In Database [ Function Accept Parameters ]
** $select = The Item To Select [ Example: user, item, category ]
** $from = The Table To Select From [ Example: users, items, categories ]
** $value = The Value Of Select [ Example: Osama, Box, Electronics ]
*/

function checkItem($select, $from, $value) {

    global $con;

    $statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");

    $statement->execute(array($value));

    $count = $statement->rowCount();

    return $count;

}
echo "<h1 class='text-center'>Delete Item</h1>";
echo "<div class='container'>";

// Check If Get Request Item ID Is Numeric & Get The Integer Value Of It

$itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;

// Select All Data Depend On This ID

$check = checkItem('Item_ID', 'items', $itemid);

// If There's Such ID Show The Form

if ($check > 0) {

    $stmt = $con->prepare("DELETE FROM items WHERE Item_ID = :zid");

    $stmt->bindParam(":zid", $itemid);

    $stmt->execute();

    $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' Record Deleted</div>';

    redirectHome($theMsg, 'back');

} else {

    $theMsg = '<div class="alert alert-danger">This ID is Not Exist</div>';

    redirectHome($theMsg);

}

echo '</div>';


include 'include/footer.php' ?>