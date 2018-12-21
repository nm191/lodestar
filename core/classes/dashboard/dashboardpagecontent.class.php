<?php
  class Dashboard_DashboardPageContent{
    private static $current_user;

    private static function setStaticVariables(User &$current_user){
      self::$current_user = &$current_user;
    }

    public static function get(User &$current_user){
      self::setStaticVariables($current_user);

      $return_ar[] = HTML_Layout::getHeaderElement('Dashboard');    
      $return_ar[] = HTML::Div(self::getOrdersChart(), '', 'col-sm-12 col-md-4 col-lg-4');
      $return_ar[] = HTML::Div(self::getCustomersChart(), '', 'col-sm-12 col-md-4 col-lg-4');
      $return_ar[] = HTML::Div(self::getProductsChart(), '', 'col-sm-12 col-md-4 col-lg-4');
      $return_ar[] = self::getJquery  ();

      return HTML::Div(implode('', $return_ar), '', 'row');
    }

    private static function getOrdersChart(){
      $return_ar[] = HTML::Div('# of Orders', '', 'card-header');
      $return_ar[] = HTML::Div(HTML::Canvas('', 'ordersChart'), '', 'card-body');

      return HTML::Div(implode('', $return_ar), '', 'card');
    }

    private static function getCustomersChart(){
      $return_ar[] = HTML::Div('# of Customers', '', 'card-header');
      $return_ar[] = HTML::Div(HTML::Canvas('', 'customersChart'), '', 'card-body');

      return HTML::Div(implode('', $return_ar), '', 'card');
    }

    private static function getProductsChart(){
      $return_ar[] = HTML::Div('Popular Products', '', 'card-header');
      $return_ar[] = HTML::Div(HTML::Canvas('', 'productsChart'), '', 'card-body');

      return HTML::Div(implode('', $return_ar), '', 'card');
    }

    private static function getJquery(){
      ob_start();
      ?>
      <script>
        $(document).ready(function(){
          var ctxOrders = $("#ordersChart");
          var OrdersChart = new Chart(ctxOrders, {
              type: 'bar',
              data: {
                  labels: ["Red", "Blue", "Yelow", "Green", "Purple", "Orange"],
                  datasets: [{
                      label: '# of Orders',
                      data: [12, 19, 3, 5, 2, 3],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(255, 159, 64, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(255, 159, 64, 1)'
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });

          var ctxCustomers = $("#customersChart");
          var CustomersChart = new Chart(ctxCustomers, {
              type: 'line',
              data: {
                  labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                  datasets: [{
                      label: '# of Customers',
                      data: [12, 19, 3, 5, 2, 3],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                         
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });

          var ctxProducts = $("#productsChart");
          var ProductsChart = new Chart(ctxProducts, {
              type: 'doughnut',
              data: {
                  labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                  datasets: [{
                      label: '# of Customers',
                      data: [12, 19, 3, 5, 2, 3],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(255, 159, 64, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(255, 159, 64, 1)'
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });
        });
      </script>
      <?php
      return ob_get_clean();
    }
  }