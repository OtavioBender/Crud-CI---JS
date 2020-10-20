class Matematica {
        int multiplica(int a, int b){
        return a*b;
        }
        double raiz(float n){
                return Math.sqrt(n);
        }
//      divisao
//      adicao
//      subtracao
}

class Principal{
   public static void main(String a[]){
        Matematica mat = new Matematica();
        System.out.println("resultado de 2*4: "+ mat.multiplica(2,4) );
        System.out.println("raiz de 9:  "+mat.raiz(9) );
   }
}