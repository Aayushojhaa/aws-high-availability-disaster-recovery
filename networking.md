 Networking Design (Multi-Region)

 VPC Design

Each region has its own isolated Amazon VPC to ensure fault isolation.

 Subnet Strategy

Public Subnets:
- Application Load Balancer
- NAT Gateway

Private Subnets:
- EC2 application servers
- RDS and Redis

 Routing

- Public route tables connect to Internet Gateway
- Private route tables route outbound traffic via NAT Gateway

This ensures backend services remain secure and inaccessible from the internet.
