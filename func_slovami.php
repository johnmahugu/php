<?


if ($slovamiPLUS!=1)
{
$slovamiPLUS=1;




#####################################
# ����������� ������������ �������
#####################################


function slovami_declare()
{
    global $velikany;
    global $do1000;


    $do1000 = array(

        '�' => array (0=> "����", 
            1 => array (1=>"����", 2=>"����",3=>"����"), 
            2 => array (1=>"���", 2=>"���",3=>"���"), 
            3 => "���", 4 => "������", 5 => "����", 6 => "�����", 
            7 => "����", 8 => "������", 9 => "������",
            
            10 => "������", 11=> "�����������", 12=> "����������", 
            13=> "����������", 14=> "������������", 15=> "����������", 
            16=> "�����������", 17=> "����������", 
            18=> "������������", 19=> "������������",
            
            20 => "��������", 30=> "��������", 40=> "�����", 
            50=> "���������", 60=> "����������", 70=> "���������", 
            80=> "�����������", 90=> "���������",
            
            100 => "���", 200=> "������", 300=> "������", 
            400=> "���������", 500=> "�������", 600=> "��������", 
            700=> "�������", 800=> "���������", 900=> "���������"
        ),

        '�' => array (0=> "����", 
            1 => array (1=>"������", 2=>"�����",3=>"������"), 
            2 => array (1=>"����", 2=>"����",3=>"����"), 3 => "���", 
            4 => "������", 5 => "����", 6 => "�����", 7 => "����", 
            8 => "������", 9 => "������",
            
            10 => "������", 11=> "�����������", 12=> "����������", 
            13=> "����������", 14=> "������������", 15=> "����������", 
            16=> "�����������", 17=> "����������", 18=> "������������", 
            19=> "������������",
            
            20 => "��������", 30=> "��������", 40=> "������", 
            50=> "����������", 60=> "�����������", 70=> "����������", 
            80=> "������������", 90=> "���������",
            
            100 => "���", 200=> "�������", 300=> "������", 
            400=> "���������", 500=> "�������", 600=> "��������", 
            700=> "�������", 800=> "���������", 900=> "���������"
        ),

        '�' => array (0=> "����", 
            1 => array (1=>"������", 2=>"�����",3=>"������"), 
            2 => array (1=>"����", 2=>"����",3=>"����"), 
            3 => "���", 4 => "������", 5 => "����", 6 => "�����", 
            7 => "����", 8 => "������", 9 => "������",
            
            10 => "������", 11=> "�����������", 12=> "����������", 
            13=> "����������", 14=> "������������", 15=> "����������", 
            16=> "�����������", 17=> "����������", 18=> "������������", 
            19=> "������������",
            
            20 => "��������", 30=> "��������", 40=> "������", 
            50=> "����������", 60=> "�����������", 70=> "����������", 
            80=> "������������", 90=> "���������",
            
            100 => "���", 200=> "��������", 300=> "�������", 
            400=> "����������", 500=> "��������", 600=> "���������", 
            700=> "��������", 800=> "����������", 900=> "����������"
        ),

        '�' => array (0=> "����", 
            1 => array (1=>"������", 2=>"����",3=>"������"), 
            2 => array (1=>"����", 2=>"����",3=>"����"), 3 => "���", 
            4 => "������", 5 => "����", 6 => "�����", 7 => "����", 
            8 => "������", 9 => "������",
            
            10 => "������", 11=> "�����������", 12=> "����������", 
            13=> "����������", 14=> "������������", 15=> "����������", 
            16=> "�����������", 17=> "����������", 18=> "������������", 
            19=> "������������",
            
            20 => "��������", 30=> "��������", 40=> "�����", 
            50=> "���������", 60=> "����������", 70=> "���������", 
            80=> "����������", 90=> "���������",
            
            100 => "���", 200=> "������", 300=> "������", 
            400=> "���������", 500=> "�������", 600=> "��������", 
            700=> "�������", 800=> "���������", 900=> "���������"
        ),

        '�' => array (0=> "�����", 
            1 => array (1=>"�����", 2=>"�����",3=>"�����"), 
            2 => array (1=>"�����", 2=>"�����",3=>"�����"), 
            3 => "�����", 4 => "��������", 5 => "�����", 6 => "������", 
            7 => "�����", 8 => "�������", 9 => "�������",
            
            10 => "�������", 11=> "������������", 12=> "�����������", 
            13=> "�����������", 14=> "�������������", 
            15=> "�����������", 16=> "������������", 17=> "�����������", 
            18=> "�������������", 19=> "�������������",
            
            20 => "���������", 30=> "���������", 40=> "������", 
            50=> "������������", 60=> "�������������", 
            70=> "������������", 80=> "��������������", 
            90=> "���������",
            
            100 => "���", 200=> "����������", 300=> "����������", 
            400=> "�������������", 500=> "����������", 
            600=> "�����������", 700=> "����������", 
            800=> "������������", 900=> "������������"
        ),

        '�' => array (0=> "����", 
            1 => array (1=>"�����", 2=>"�����",3=>"�����"), 
            2 => array (1=>"����", 2=>"����",3=>"����"), 3 => "���", 
            4 => "������", 5 => "����", 6 => "�����", 7 => "����", 
            8 => "������", 9 => "������",
            
            10 => "������", 11=> "�����������", 12=> "����������", 
            13=> "����������", 14=> "������������", 15=> "����������", 
            16=> "�����������", 17=> "����������", 18=> "������������", 
            19=> "������������",
            
            20 => "��������", 30=> "��������", 40=> "������", 
            50=> "����������", 60=> "�����������", 70=> "����������", 
            80=> "������������", 90=> "���������",
            
            100 => "���", 200=> "��������", 300=> "�������", 
            400=> "����������", 500=> "��������", 600=> "���������", 
            700=> "��������", 800=> "����������", 900=> "����������"
        )

    );



    # ������ � �������-���������� � ������������ ������
    $velikany = array(
        1=> array(
            '�' => array (
                1=> "������",
                2=> "�������",
                3=> "��������",
                4=> "��������",
                5=> "�����������",
                6=> "�����������",
                7=> "�����������",
                8=> "����������",
                9=> "���������",
                10=> "���������",
                11=> "���������",
                12=> "�����������",
                13=> "������������",
                14=> "������������",
                15=> "�����������������",
                16=> "�������������",
                17=> "�����������",
                18=> "�������������",
                19=> "�����������������",
                20=> "����������������",
                21=> "������������",
            )
        )
    );



    # ��������� �����-���������
    for ($a=2;$a<=21;$a++)
    {
        $velikany[1]['�'][$a]=$velikany[1]['�'][$a]."�";
        $velikany[1]['�'][$a]=$velikany[1]['�'][$a]."�";
        $velikany[1]['�'][$a]=$velikany[1]['�'][$a];
        $velikany[1]['�'][$a]=$velikany[1]['�'][$a]."��";
        $velikany[1]['�'][$a]=$velikany[1]['�'][$a]."�";

        $velikany[2]['�'][$a]=$velikany[1]['�'][$a]."�";
        $velikany[2]['�'][$a]=$velikany[1]['�'][$a]."��";
        $velikany[2]['�'][$a]=$velikany[1]['�'][$a]."��";
        $velikany[2]['�'][$a]=$velikany[1]['�'][$a]."�";
        $velikany[2]['�'][$a]=$velikany[1]['�'][$a]."���";
        $velikany[2]['�'][$a]=$velikany[1]['�'][$a]."��";
    }

    $velikany[1]['�'][1]="������";
    $velikany[1]['�'][1]="������";
    $velikany[1]['�'][1]="������";
    $velikany[1]['�'][1]="�������";
    $velikany[1]['�'][1]="������";

    $velikany[2]['�'][1]="������";
    $velikany[2]['�'][1]="�����";
    $velikany[2]['�'][1]="�������";
    $velikany[2]['�'][1]="������";
    $velikany[2]['�'][1]="��������";
    $velikany[2]['�'][1]="�������";
}



#####################
# �������� �������
#####################

function slovami($number, $padej = '�', $rod = 1)
{

    /*
    $number - ������������ �����, ��������, 1234321
    
    $padej - ������ ����� ������ ������ ���������, ��������, "�" - ���������
    
    $rod - ���, 1 - �������, 2 - �������, 3 - ������� 
    (��������� ��� ��������� �����, �������������� �� "1" ��� "2"). 
    
    ������� ��� ����� ���� ����������, ��������, 
    ��� ����� ������, ������� - ��� ����� ������ 
    */

    global $velikany;
    global $do1000;

    if (!$do1000)
    {
        slovami_declare();
    }

    $number = (string)$number;

    $padej = (string)$padej;
    $padej = strtolower($padej);
    $padej = $padej[0];
    $rod = (int)$rod;

    # ������ �� ����������� ����� �� 1000




    # ���� �������� - 0, �� �� ��� ����� ������� ���������
    if ($number == '0')
    {
        return $do1000[$padej][0];
    }






    # ������� ����������, � ������� ����� ������������ ����������� �������� �����
    $text = "";

    $skolkocifr = strlen($number) - 1;
    
    for ($a = floor($skolkocifr/3); $a >= 0; $a--)
    {
        # �������� ����� �����, �������� � ������
        $s = $skolkocifr - 3 * $a;
        
        $sotni = (int)($number[$s - 2]);
        $des = (int)($number[$s - 1]);
        $edin = (int)($number[$s]);


        if ($sotni)
        {
            # ����������� � ������ ����� ����� (��������, "������")

            $text .= $do1000[$padej][$sotni * 100] . " ";
        }


        # ���� ����� �������� ����� ������� (����� �� 10 �� 19), 
        # �� �������� ������� ����� (��������, "����������")
        
        if ($des == 1)
        {
            $text .= $do1000[$padej][$des * 10 + $edin] . " ";
        }
        else
        {

            if ($des)
            {
                # ���� ����� �������� �� ����� ����, 
                # �������� �������������� ����� (��������, "��������")

                $text .= $do1000[$padej][$des * 10] . " ";
            }

            # ���� ����� ������ �� ����� ����...
            if ($edin)
            {


                $padej1 = $padej;
                if ($padej == '�' && ($edin != 1 || $a != 1))
                {
                    # ���� ��������� ����� ����������� � ����� ������ - 
                    # �� 1 (��� ������ "���� ������"), �� ����� �����, 
                    # ��������� � �.�. ������ ���� � ������������ ������ 
                    # (��� ��������������)

                    $padej1 = '�';
                }



                # ���� ����� ������ �� ����� 1 ��� 2 
                # (�����, ��� ������� ���� ���) ��� ������ ��� 
                # ���������� ��������� ��� ����� ������� ��������
                
                if (($edin != 1 && ($edin != 2 || $padej != '�')) || $a > 1)
                {

                    if ($edin==1 || $edin==2 )
                    {
                        # ���� ����� ������ ����� 1 ��� 2 
                        # (��� ���������� ��������� ��� ����� ������� 
                        # ��������), �������� ������� ������� ������� �����

                        # ("���� ���������")
                        $text .= $do1000[$padej1][$edin][1] . " ";
                    }
                    else
                    {
                        # ����� �������� ������ ������� 
                        # (������� ����� ��� ���� ����� ���)

                        # ("���� ���������")
                        $text .= $do1000[$padej1][$edin] . " ";
                    }
                }
                else
                {
                    if ($a == 1)
                    {
                        # ������� ��� ��� ����� ("���� ������")

                        $text .= $do1000[$padej1][$edin][2] . " ";
                    }
                    if (!$a)
                    {
                        # ���, ��������� � ��������� �������, 
                        # ��� ������, ����� ��� ���� ������ ���, 
                        # ��� ������ � ��������� 
                        # (��������� ��� ������������ ������)

                        # ("����")
                        $text .= $do1000[$padej][$edin][$rod] . " ";
                    }
                }

            }
        }

        # ���� ��� �� ����� ������, �������� �������� 
        # �������� ����� (������, ������� � �.�.)

        if ($a!=0)
        {

            #  ����� �������� ����� �����������, ����� 
            # ������������� ("�������� ���� �����")
            
            $chi=2; 
            $pad='�'; 

            if ($edin==1)
            {
                # ����� �������� ����� ������������, 
                # ����� ������������ ("���� ������")

                $chi=1;
                $pad='�';
            }
            if ($edin==2 || $edin==3 || $edin==4)
            {
                # ����� �������� ����� �����������, ����� 
                # ������������ ("��� ��������")

                $chi=1;
                $pad='�';
            }
            if ($des==1)
            {
                #  ����� �������� ����� �����������, ����� 
                # ������������� ("���������� �����")

                $chi=2;
                $pad='�';
            }

            if ($padej!='�')
            {
                # ���� ������ ����� (�� ������������), �� ������� ����� 
                # ��������� ���� ����� ("����� ��������")

                $pad=$padej;


                if ($des!=1 && $edin==1)
                {
                    # ���� ����� �����-��������� ������������ �� "1", 
                    # �������� ������ "11", �� ����� �����-��������� 
                    # ������������ ("���� ������")

                    $chi = 1;
                }
                else
                {
                    # ����� ����� �����-��������� ������������� 
                    # ("����������� �����", "��� �����")

                    $chi = 2;
                }
            }

            $text .= $velikany[$chi][$pad][$a]." ";
        }

    }


    return trim($text);
}





}

?>