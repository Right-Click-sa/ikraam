  <!DOCTYPE html>
  @langrtl
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
  @else
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @endlangrtl
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body >
      <style>
          h2 small{
              color: #FEB12C;
          }
          hr{
              border-width: .1px;
          }
      </style>
      <div>
          <div style="max-width: 600px; margin: auto;background-color:#00293D ; padding: 50px 30px; color:#fff; border-radius:20px;">
              <h1 style="text-align: center;" >
                  @lang('You have a new message')
              </h1>
              <hr style="border-color: #FEB12C;">
              <br>
              <br>
              <br>
              <h2 style="text-align: {{ app()->getLocale() == 'en' ? 'left' : 'right' }};" >
                  <small>
                      @lang('Name'):
                  </small>
                  <b>
                      {{ $contactUs->name }}
                  </b>
              </h2>
              <hr>

              <h2 style="text-align: {{ app()->getLocale() == 'en' ? 'left' : 'right' }};">
                  <small>
                      @lang('Phone'):
                  </small>
                  <b>
                      {{ $contactUs->phone ?? 'N/A' }}
                  </b>
              </h2>
              <hr>

              @if (app()->getLocale() == 'ar')
                <h2 style="text-align: right;">
                  <b>
                    {{ $contactUs->email }}
                  </b>
                  <small>
                    :@lang('Email')
                  </small>
                </h2>
              @else
                <h2 style="text-align: left;">
                  <small>
                    @lang('Email'):
                  </small>
                  <b>
                    {{ $contactUs->email }}
                  </b>
                </h2>
              @endif
              <hr>

              <h2 style="text-align: {{ app()->getLocale() == 'en' ? 'left' : 'right' }};">
                  <small>
                      @lang('Message'):
                  </small>
                  <b>
                      {{ $contactUs->message }}
                  </b>
              </h2>
          </div>

      </div>
  </body>
  </html>
