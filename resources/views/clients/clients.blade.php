@extends('layouts.erkinapp')

@section('content')

<div class="page-content">
    
    
    
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Клиенты</h2>
          </div>
        </div>


              <!-- Modal Form-->
        <div class="container-fluid">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary mr-2 ml-2"><i class="fa fa-plus" aria-hidden="true"></i> Добавить </button>

          <button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-primary ml-2"><i class="fa fa-filter" aria-hidden="true"></i> Фильтр </button>
        </div>


                    <!-- Modal1-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Заказ</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <p>Клиент</p>
                            <form>
                              <div class="form-group">
                                <label>Имя клиента</label>
                                <input type="text" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Телефон</label>
                                <input type="number" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Дата</label>
                                <input type="date" placeholder="" class="form-control">
                              </div>
                              <hr>
                              <div class="form-group">
                                <label>Нам должен (сумма):</label>
                                <input type="number" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Мы должны (сумма):</label>
                                <input type="number" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Дополниьельная информация</label>
                                <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
                              </div>
                              <div class="form-group">
                                <label>Исполнитель</label>
                                <select name="account" class="form-control mb-3 mb-3">
                                  <option>Дилмурод</option>
                                  <option>Достон</option>
                                  <option>Икром</option>
                                  <option>Нурали</option>
                                </select>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Создать</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal1-->

                    <!-- Modal2-->
                    <div id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Фильтр</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>Имя клиента</label>
                                <input type="text" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>По дате</label>
                                <input type="date" placeholder="" class="form-control">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Фильтр</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal2-->

        <section class="no-padding-top mt-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Таблица клиентов</strong></div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>№</th>
                          <th>Клиент</th>
                          <th>Номер тел:</th>
                          <th>Дата</th>
                          <th>Нам должен</th>
                          <th>Мы должны</th>
                          <th>Доп. информация</th>
                          <th>Исполнитель</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td style="color: yellow;">Ойбек ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td style="color: yellow;">Фаррух ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td style="color: yellow;">Ойбек ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td style="color: yellow;">Фаррух ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td style="color: yellow;">Ойбек ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td style="color: yellow;">Фаррух ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td style="color: yellow;">Ойбек ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td style="color: yellow;">Фаррух ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td style="color: yellow;">Ойбек ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td style="color: yellow;">Фаррух ака</td>
                          <td style="color: white;">+99899 833 99 27</td>
                          <td>до: 06.06.2021</td>
                          <td>1 000 000 (сум)</td>
                          <td>5 000 000 (сум)</td>
                          <td>Постоянный клиент</td>
                          <td style="color: white;">Достон</td>
                        </tr>




                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>




    
    
</div>

@endsection