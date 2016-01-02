<script src="{$setup.adm.www}assets/js/jquery.gritter.min.js"></script>

<script type="text/javascript">
    $(function(){
        $(".ace-switch").change(function(){
            var id = $(this).attr('data-id');
            var typ = $(this).attr('data-typ');
            var checked = $(this).prop('checked');
            
            $.post("{$setup.request_url}", { 'function': 'check', 'perm': '{$smarty.get.perm}', 'id': id, 'typ': typ, 'checked': checked },
            function(ret) {
                if(ret == 'chyba'){
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vyskytla se chyba zkuste to opakovat později',
                            class_name: 'gritter-error',
                            time: 1500
                    });
                }else{
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vše proběhlo v pořádku',
                            class_name: 'gritter-success',
                            time: 1500
                    });
                }
            }
            );
        });
        
        $(".dd-list .dd-list li .dd-handle").click(function(){
            var element = $(this);    
            var id = element.parent().attr('data-id');
            
            $.post("{$setup.request_url}", { 'function': 'default', 'perm': '{$smarty.get.perm}', 'id': id },
            function(ret) {
                if (ret == 'chyba') {
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vyskytla se chyba zkuste to opakovat později',
                            class_name: 'gritter-error',
                            time: 1500
                    });
                }else{
                    $('.dd-list .dd-list li .dd-handle i').removeClass('orange');
                    element.children('i:first').addClass('orange');
                    $.gritter.add({
                            title: 'Výsledek operace na pozadí',
                            text: 'Vše proběhlo v pořádku',
                            class_name: 'gritter-success',
                            time: 1500
                    });
                }
            }
            );
            
        });
    });
</script>