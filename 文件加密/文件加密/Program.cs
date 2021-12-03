using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace 文件加密
{
    class Program
    {

           // 加密方法：将原字符串与加密字符进行异或
        private static char[] Encrypt(string content, string secretKey)
        {

            char[] data = content.ToCharArray();
            char[] key = secretKey.ToCharArray();
            for (int i = 0; i < data.Length; i++)
            {
                data[i] ^= key[i % key.Length];
            }

            return data;
        }
        //解密方法：将加密后的字符数组与加密字符进行异或
        private static string Decrypt(char[] data, string secretKey)
        {
            char[] key = secretKey.ToCharArray();

            for (int i = 0; i < data.Length; i++)
            {
                data[i] ^= key[i % key.Length];
            }

            return new string(data);
        }



        static void Main(string[] args)
        {
            string filePath = Directory.GetCurrentDirectory();
            filePath = filePath + "\\test.txt";                  //得到路径
            string str = File.ReadAllText(filePath, Encoding.UTF8);

            char[] data = Encrypt(str, "123");      //将"123"作为密钥
             string afterEncrypt = new string(data);
            File.WriteAllText(filePath, afterEncrypt, Encoding.UTF8);

            
            // char[] data1 = str.ToCharArray();
           // string strl = Decrypt(data1, "123");    //解密 str1为解密后的文本



            Console.WriteLine(str);
           // Console.WriteLine(strl);
            Console.ReadKey();

        }

    

    }
}
