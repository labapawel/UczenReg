<p>
    <input type="checkbox" name="regulamin" id="">
    @if ($errors->has('regulamin'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('regulamin') }}</strong>
                                </span>
                            @endif                            
                            Wyrażam zgodę na przetwarzanie podanych przeze mnie danych i informuję, że zapoznałem się z Zasadami przetwarzania danych osobowych w Prywatnym Technikum Informatycznym w bielsku-Białej przekazanymi na podstawie art.13 ogólnego rozporządzenia o ochronie danych osobowych (RODO).</p>

<p>
<input type="checkbox" name="regulamin_elek" id="">    
@if ($errors->has('regulamin_elek'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('regulamin_elek') }}</strong>
                                </span>
                            @endif   
                            Zapoznałem/am się z Regulamin świadczenia usług drogą elektroniczną wydany na postawie art. 8 ust. 1 pkt 1 Ustawy z dnia 18 lipca 2002 roku i akceptuję jego warunki.
</p>