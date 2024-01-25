<?php 
if (isset($_GET['compare_id']) && isset($_GET['num_compera_id'])) {
    $num_compare_id = json_decode(base64_decode($_GET['num_compera_id']));
    $compare_id = $_GET['compare_id'];
    $check = true;
    foreach ($num_compare_id as $id) {
        if ($id == $compare_id) {
            $check = false;
            break;
        }
    }
    if ($check) {
        $num_compare_id[] = $compare_id;

        header('Location: ../index.php?num_compera_id=' . base64_encode(json_encode($num_compare_id)));

    } else {
        echo "var modal = document.getElementById('myModal');
        modal.style.display = 'block';";
        header('Location: ../index.php?num_compera_id=' . base64_encode(json_encode($num_compare_id)));
    }
}
?>

<a href="include/get_num_compare.php?compare_id=<?php echo $product['id'] ?>&num_compera_id=<?php echo base64_encode(json_encode($num_compare_id)); ?>"  
                           onclick="openModal();">
                           <svg style="display: inline-block;" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-plus-circle ms-2 mb-2"
                                viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg>
                           </a>