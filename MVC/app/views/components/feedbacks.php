<div id="notifs" class="fixed top-12 bg-green-300 w-full z-10">
        <h1><?php if ($failure) {
            echo $failure;
            
        }
        if ($success) {
            echo $success;
           
        } ?></h1>
        
    </div>