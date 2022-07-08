<html>

  <head>
    <style>
      /** 
                  Set the margins of the page to 0, so the footer and the header
                  can be of the full height and width !
               **/
      @page {
        margin: 0cm 0cm;
      }
  
      /** Define now the real margins of every page in the PDF **/
      body {
        margin-top: 2.8cm;
        margin-left: 2cm;
        margin-right: 2cm;
        margin-bottom: 2.8cm;
      }
  
      /** Define the header rules **/
      header {
        position: fixed;
        top: 0.5cm;
        left: 0cm;
        right: 0cm;
        height: 3cm;
      }
  
      /** Define the footer rules **/
      footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2.6cm;
      }
  
      /* Global */
  
      p {
        margin-top: 3px;
        margin-bottom: 8px;
      }
  
      p.justify {
        text-align: justify;
      }
  
      td {
        vertical-align: top;
      }
  
      div.barcode>div {
        margin: 0 auto;
      }
  
      table {
        margin-bottom: 8px;
      }
  
      table.table {
        border: 1px solid #333;
        border-right: none;
        border-spacing: 0px;
        border-collapse: separate;
      }
  
      table.table-bordered tr td,
      table.table-bordered tr th {
        border-top: 1px solid #333;
        border-right: 1px solid #333;
        padding: 5px;
      }
  
      table.table-bordered tr th {
        font-weight: bold;
        border-top: none;
      }
      .text-center {
        text-align: center;
      }
    </style>
  </head>
  
  <body>
    <!-- Define header and footer blocks before your content -->
    <header>
      <img style="width:100%;margin-bottom:0.7cm;" src="{{ public_path('images/asset/header-surat.png') }}" alt="">
    </header>
  
    <footer>
      <img style="width:100%;margin-bottom:0.7cm;" src="{{ public_path('images/asset/footer-surat.jpg') }}" alt="">
    </footer>
    
    <main>
      @yield('content')
  </main>
    
  </body>

</html>
