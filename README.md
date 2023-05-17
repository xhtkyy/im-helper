# xhtkyy/im-helper

```
composer require xhtkyy/im-helper dev-main
```

生成protobuf

```
//例如
vendor/xhtkyy/hyperf-tools/bin/grpc-generator -protoPath=../../protos,../../protos/third_party -clientExtendClass=\\Xhtkyy\\HyperfTools\\GrpcClient\\BaseGrpcClient -path=./grpc -proto='../../protos/im/v1/schema.proto'
```