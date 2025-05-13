#include <iostream>
using namespace std;
int a,b,c=0,d;
string x;
int main()
{
  // 请在此输入您的代码
  cin>>a;
  for(int i=0;i<a;i++){
  	cin>>x;
	b=x.size()-1;
	if(x[0]==x[b]){
		c=0;
		while(c>=0){
			if(c>b/2){
				cout<<"Yes"<<'\n';
				break;
			}
			if(x[c]!=x[b-c]){
				cout<<"No"<<'\n';
				break;
			}
			c++;
		}
	}else{
		
		}
	}
  }
  return 0;
}
