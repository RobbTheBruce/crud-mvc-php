// anonymous original author, but here's a good source: http://www.tidbits.com.br/colecao-de-metodos-para-o-plugin-validate-do-jquery

(function ($) {
  $.validator.addMethod('cpf',function(value,element,param) {
       $return = true;

       // this is mostly not needed
       var invalidos = [
            '111.111.111-11',
            '222.222.222-22',
            '333.333.333-33',
            '444.444.444-44',
            '555.555.555-55',
            '666.666.666-66',
            '777.777.777-77',
            '888.888.888-88',
            '999.999.999-99',
            '000.000.000-00'
        ];
        for(i=0;i<invalidos.length;i++) {
            if( invalidos[i] == value) {
                $return = false;
            }
        }

        value = value.replace("-","");
        value = value.replace(/\./g,"");

        //validando primeiro digito
        add = 0;
        for ( i=0; i < 9; i++ ) {
            add += parseInt(value.charAt(i), 10) * (10-i);
        }
        rev = 11 - ( add % 11 );
        if( rev == 10 || rev == 11) {
            rev = 0;
        }
        if( rev != parseInt(value.charAt(9), 10) ) {
            $return = false;
        }

        //validando segundo digito
        add = 0;
        for ( i=0; i < 10; i++ ) {
            add += parseInt(value.charAt(i), 10) * (11-i);
        }
        rev = 11 - ( add % 11 );
        if( rev == 10 || rev == 11) {
            rev = 0;
        }
        if( rev != parseInt(value.charAt(10), 10) ) {
            $return = false;
        }

        return $return;
    });
})(jQuery);
