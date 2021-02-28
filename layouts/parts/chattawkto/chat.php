<?php
    $chatKeyName = isset($plugin->config['chat_link_url']) ? $plugin->config['chat_link_url'] : '';
    $chatKeyName = str_replace("https://tawk.to/chat/","",$chatKeyName);
?>

<?php if(!empty($chatKeyName)): ?>
    <!--Start of CHAT Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/<?php print $chatKeyName ; ?>';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of CHAT Tawk.to Script-->
<?php endif; ?>