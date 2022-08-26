<!doctype html>
<html lang="en">

<head>
    <title>Biểu đồ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="alert alert-success">
        <strong>
            <h3 style="text-align: center;">Thống kê</h3>
        </strong>
    </div>
    <div class="alert alert-success">
        <strong>
            <h5 style="text-align: center;">Biểu đồ theo hóa đơn</h5>
        </strong>
    </div>
    <div id="bieudo" style="height: 250px;"></div>
    <?php
    $chart_data = '';
    $row = bieu_do_hd();
    foreach ($row as $a) {
        $chart_data .= "{ten:'" . $a['ten_goi_bang_tin'] . "',soluong : '" . $a['soluong'] . "',doanhthu : '" . $a['thanhtien'] . "'},";
    }
    // $chart_data = substr($chart_data, 0, -2);
    ?>
    <script>
        new Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'bieudo',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                <?php echo $chart_data; ?>
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'ten',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['soluong', 'doanhthu'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Tên gói đăng tin', 'Số lượng', 'Doanh thu bán ra'],
            hideHover: 'auto',
            stacked: true
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>