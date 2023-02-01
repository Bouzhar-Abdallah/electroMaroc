<div id="feedbacks" class="fixed transition-all duration-500 ease-in -top-20 w-full -z-10 <?php echo ($failure) ?  'bg-red-200' :  'bg-green-200' ?>"><?php if ($failure) echo
    '<div class="flex items-center justify-center py-3 px-5 text-2xl">
    <div class="mx-4 w-10 h-10">
<svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path  stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
</svg>
</div>
<h1 class="">' . $failure . '</h1>
</div>
';
    if ($success) echo
    '<div class="flex items-center justify-center py-3 px-5 text-2xl">
    <div class="mx-4 w-10 h-10">
    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
    </svg>
    </div>
    <h1 class="">' . $success . '</h1>
</div>'
    ?></div>
    <script src="<?= ROOT ?>assets/js/feedbacks.js"></script>