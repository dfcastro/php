<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            // inicio: DiretorComercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //inicio: gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                    //termino:gerende de vendas
                )
            ),
            // termino: Diretor Comercial
            //inicio: diretor financeiro
            array(
                'nome_cargo'=>'Diretor Financeniro',
                'subordinados'=>array(
                    //inicio:gerende de costa a pagar
                    array(
                        'nome_cargo'=>'gerente de contas a pagar',
                        'subordinados'=>array(
                            //inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )

                            //temrino: superviso de pagamentos
                        )
                    )
                            ),
                //termino:gerente de contas a pagar
                //inicio gerente de compras
                array(
                    'nome_cargo'=>'gerente de compras',
                    'subordinados'=>array(
                ////inicio:supervisor de suprimentos
                        array(
                            'nome_cargo'=>'Supervisor de suprimentos'
                        )
                        //termino: supervisor de suprimentos
                    )
                )
            )

            //termino: diretor financeiro
        )
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach($cargos as $cargo){

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados'])> 0){

            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);

?>